//Author-Pinky Gajjar Date 10 Oct 2023

// app.js
const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.json());

const Book = require('./models/book');
const Author = require('./models/author');

// ...

// Define your routes here

// Get all books
app.get('/books', async (req, res) => {
  try {
    const books = await Book.find();
    res.json(books);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
});

// Create a new book
app.post('/books', async (req, res) => {
  const newBook = new Book(req.body);
  try {
    const book = await newBook.save();
    res.status(201).json(book);
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});

// Update a book by ID
app.put('/books/:id', async (req, res) => {
  try {
    const updatedBook = await Book.findByIdAndUpdate(req.params.id, req.body, { new: true });
    res.json(updatedBook);
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});

// Delete a book by ID
app.delete('/books/:id', async (req, res) => {
  try {
    await Book.findByIdAndRemove(req.params.id);
    res.status(204).end();
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});

// ...

// Get all authors
app.get('/authors', async (req, res) => {
  try {
    const authors = await Author.find();
    res.json(authors);
  } catch (err) {
    res.status(500).json({ error: err.message });
  }
});

// Get all authors
app.post('/authors', async (req, res) => {
  const newAuthor = new Author(req.body);
  try {
    const author = await newAuthor.save();
    res.status(201).json(author);
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});

// Update a author by ID
app.put('/authors/:id', async (req, res) => {
  try {
    const updatedAuthor = await Author.findByIdAndUpdate(req.params.id, req.body, { new: true });
    res.json(updatedAuthor);
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});

// Delete a Author by ID
app.delete('/authors/:id', async (req, res) => {
  try {
    await Author.findByIdAndRemove(req.params.id);
    res.status(204).end();
  } catch (err) {
    res.status(400).json({ error: err.message });
  }
});




const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
