//
// Copy files and render templates to /www
//

const fs = require("fs-extra")
const mustache = require("mustache")
const path = require("path")
const gm = require("gm")
const htmlMinifier = require("html-minifier")
const CleanCss = require("clean-css")
const uglifyJs = require("uglify-js")
const createTemplateContext = require("./create-template-context")

const build = ({ optimize = true }) => {
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

    // Optimize everything in www in place
    if (optimize) {
        const optimizeDirInPlace = dirPath => {
            const dirContents = fs.readdirSync(dirPath)
            dirContents.forEach(file => {
                const filePath = path.join(dirPath, file)
                if (fs.lstatSync(filePath).isDirectory()) {
                    optimizeDirInPlace(filePath)
                } else {
                    const extName = path.extname(file)
                    if (extName === ".jpg" || extName === ".png") {
                        if (dirPath === path.join(wwwDir, "img/members")) {
                            // Special optimizations for member images
                            let imageGraphics = gm(filePath)

                            imageGraphics.size((err, size) => {
                                if (err) {
                                    throw err
                                } else {
                                    const { width, height } = size
                                    if (width !== height) {
                                        const newDimension = Math.min(
                                            width,
                                            height
                                        )
                                        imageGraphics = imageGraphics.crop(
                                            newDimension,
                                            newDimension,
                                            (width - newDimension) / 2,
                                            (height - newDimension) / 2
                                        )
                                    }

                                    const MEMBER_DIMENSION = 400
                                    imageGraphics
                                        .resize(
                                            MEMBER_DIMENSION,
                                            MEMBER_DIMENSION
                                        )
                                        .colorspace("Rec709Luma") // Make images Grey scale
                                        .write(filePath, err => {
                                            if (err) throw err
                                        })
                                }
                            })
                        } else {
                            // TODO: lossless compression?
                        }
                    } else if (extName === ".html") {
                        fs.readFile(filePath, "utf-8", (err, data) => {
                            if (err) {
                                throw err
                            } else {
                                const minified = htmlMinifier.minify(data, {
                                    removeAttributeQuotes: true,
                                    removeComments: true,
                                    minifyCSS: true,
                                    minifyJS: true,
                                    collapseWhitespace: true,
                                    collapseBooleanAttributes: true
                                })
                                fs.writeFile(filePath, minified, err => {
                                    if (err) throw err
                                })
                            }
                        })
                    } else if (extName === ".css") {
                        fs.readFile(filePath, "utf-8", (err, data) => {
                            if (err) {
                                throw err
                            } else {
                                const minified = new CleanCss({
                                    sourceMap: true
                                }).minify(data)
                                fs.writeFile(filePath, minified.styles, err => {
                                    if (err) throw err
                                })
                            }
                        })
                    } else if (extName === ".js") {
                        fs.readFile(filePath, "utf-8", (err, data) => {
                            if (err) {
                                throw err
                            } else {
                                const minified = uglifyJs.minify(data)
                                fs.writeFile(filePath, minified.code, err => {
                                    if (err) throw err
                                })
                            }
                        })
                    }
                }
            })
        }

        optimizeDirInPlace(wwwDir)
    }
}

if (module === require.main) {
    build({ optimize: !process.argv.includes("--no-optimize") })
} else {
    module.exports = build
}
