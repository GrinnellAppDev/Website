const fs = require("fs-extra")
const mustache = require("mustache")
const path = require("path")

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
    dataFiles.forEach(file => {
        fs.copySync(`${dataDir}/${file}`, `${wwwDir}/${file}`)
    })

    // Render templates

    const templateFiles = fs.readdirSync(templatesDir)
    const partialFiles = templateFiles.filter(fileName => fileName[0] === "_")

    const partials = {}
    partialFiles.forEach(file => {
        const fileName = path.basename(file, path.extname(file))

        // Strip out the leading "_"
        const cleanFileName = fileName.substr(1)

        partials[cleanFileName] = fs.readFileSync(`${templatesDir}/${file}`, {
            encoding: "utf-8"
        })
    })

    templateFiles.filter(fileName => fileName[0] !== "_").forEach(file => {
        const fileName = path.basename(file, path.extname(file))

        fs.writeFileSync(
            `${wwwDir}/${file}`,
            mustache.render(
                fs.readFileSync(`${templatesDir}/${file}`, {
                    encoding: "utf-8"
                }),
                { page: fileName },
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
