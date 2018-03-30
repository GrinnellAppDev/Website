//
// Copy files and render templates to /www
//

const fs = require("fs-extra")
const mustache = require("mustache")
const path = require("path")
const createTemplateContext = require("./create-template-context")

const build = () => {
    const rootDir = `${__dirname}/..`
    const publicDir = `${rootDir}/src/public`
    const dataDir = `${rootDir}/src/data`
    const templatesDir = `${rootDir}/src/templates`
    const wwwDir = `${rootDir}/www`

    // Purge old build
    fs.ensureDirSync(wwwDir)
    const oldFiles = fs.readdirSync(wwwDir)
    oldFiles.forEach(file => {
        fs.removeSync(`${wwwDir}/${file}`)
    })

    // Copy over contents of public
    const publicFiles = fs.readdirSync(publicDir)
    publicFiles.forEach(file => {
        fs.copySync(`${publicDir}/${file}`, `${wwwDir}/${file}`)
    })

    // Copy over contents of data
    const dataFiles = fs.readdirSync(dataDir)
    const data = {}
    dataFiles.forEach(file => {
        const fileContents = fs.readFileSync(`${dataDir}/${file}`, {
            encoding: "utf-8"
        })

        const fileExtName = path.extname(file)
        if (fileExtName === ".json") {
            const fileBaseName = path.basename(file, fileExtName)
            data[fileBaseName] = JSON.parse(fileContents)
        }

        fs.writeFileSync(`${wwwDir}/${file}`, fileContents)
    })

    // Render templates

    const templateFiles = fs.readdirSync(templatesDir)
    const partialFiles = templateFiles.filter(fileName => fileName[0] === "_")

    const partials = {}
    partialFiles.forEach(file => {
        const fileBaseName = path.basename(file, path.extname(file))

        // Strip out the leading "_"
        const cleanName = fileBaseName.substr(1)
        partials[cleanName] = fs.readFileSync(`${templatesDir}/${file}`, {
            encoding: "utf-8"
        })
    })

    templateFiles.filter(fileName => fileName[0] !== "_").forEach(file => {
        const fileBaseName = path.basename(file, path.extname(file))

        fs.writeFileSync(
            `${wwwDir}/${file}`,
            mustache.render(
                fs.readFileSync(`${templatesDir}/${file}`, {
                    encoding: "utf-8"
                }),
                createTemplateContext(
                    { ...data, page: fileBaseName },
                    partials
                ),
                partials
            )
        )
    })
}

if (module === require.main) {
    build()
} else {
    module.exports = build
}
