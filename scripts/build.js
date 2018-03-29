const fs = require("fs-extra")
const mustache = require("mustache")

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

// Render templates
const templateFiles = fs.readdirSync(`${root}/src/templates`)
templateFiles.forEach(file => {
    // For now, just copy them
    fs.copySync(`${root}/src/templates/${file}`, `${root}/www/${file}`)
})
