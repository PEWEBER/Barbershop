//first things I did:
    //initialize npm command line "npm init" use defaults by pressing enter, this will generate package.json
    // installed some stuff via command line. "npm i express@4.16.4" found 0 vulnerabilities
    //after some coding I did "npm i nodemon@1.18.7 --save-dev"
    //to get socket.io "npm i socket.io@2.2.0"


//load express in
const path = require('path')
const http = require('http')
const express = require('express')
const socketio = require('socket.io')

const app = express()
const server = http.createServer(app)
const io  = socketio(server)

const port = process.env.PORT || 3000

//serve up public directory
const publicDirectoryPath = path.join(__dirname, 'public')

//set up server
app.use(express.static(publicDirectoryPath))


io.on('connection', (socket) => {
    console.log('New web socket connnection')

    socket.emit('message', 'welcome')

    socket.on('sendMessage', (message) => {
        
        io.emit('message', message)
    })
})

server.listen(port, () =>{
    console.log('Server is up on port ' + port)
})