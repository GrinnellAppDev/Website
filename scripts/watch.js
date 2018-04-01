//
// Run build whenever /src changes
//

const fs = require("fs")
const build = require("./build")

process.stdout.write("Running initial build... ")
build({ optimize: false })
process.stdout.write("Done.\n")

process.stdout.write("Listening for file changes to /src\n")

fs.watch(`${__dirname}/../src`, { recursive: true }, () => {
    process.stdout.write("Detected file changes. Rebuilding... ")
    build({ optimize: false })
    process.stdout.write("Done.\n")
})
