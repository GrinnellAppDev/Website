const fs = require("fs-extra")
const mustache = require("mustache")
const path = require("path")

const root = `${__dirname}/..`

// Purge old build
fs.ensureDirSync(`${root}/www`)
const oldFiles = fs.readdirSync(`${root}/www`)
oldFiles.forEach(file => {
    fs.removeSync(`${root}/www/${file}`)
})

// Copy over contents of public
const publicFiles = fs.readdirSync(`${root}/src/public`)
publicFiles.forEach(file => {
    fs.copySync(`${root}/src/public/${file}`, `${root}/www/${file}`)
})

// Copy over contents of data
const dataFiles = fs.readdirSync(`${root}/src/data`)
dataFiles.forEach(file => {
    fs.copySync(`${root}/src/data/${file}`, `${root}/www/${file}`)
})

// Render templates

const templateFiles = fs.readdirSync(`${root}/src/templates`)
const partialFiles = templateFiles.filter(fileName => fileName[0] === "_")

const partials = {}
partialFiles.forEach(file => {
    const fileName = path.basename(file, path.extname(file))

    // Strip out the leading "_"
    const cleanFileName = fileName.substr(1)

    partials[cleanFileName] = fs.readFileSync(`${root}/src/templates/${file}`, {
        encoding: "utf-8"
    })
})

templateFiles.filter(fileName => fileName[0] !== "_").forEach(file => {
    const fileName = path.basename(file, path.extname(file))

    fs.writeFileSync(
        `${root}/www/${file}`,
        mustache.render(
            fs.readFileSync(`${root}/src/templates/${file}`, {
                encoding: "utf-8"
            }),
            { page: fileName },
            partials
        )
    )
})
