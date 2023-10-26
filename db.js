
//Author-Pinky Gajjar Date 10 Oct 2023
// db.js
const mongoose = require('mongoose');

// mongoose.connect('mongodb://127.0.0.1:27017/library_system', {
mongoose.connect('mongodb+srv://markqiuym:1@cluster0.j05qwbl.mongodb.net/library_system', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
});

const db = mongoose.connection;

db.on('error', console.error.bind(console, 'Connection error:'));
db.once('open', () => {
  console.log('Connected to MongoDB');
});

module.exports = mongoose;
