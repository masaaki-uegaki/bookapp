<?php
declare(strict_types=1);

namespace App\Services;

use Illuminate\Http\Request;
use App\Book;

class BookService extends Service
{
    /**
     * Get all books
     *
     */
    public static function getBooks()
    {
        return Book::all();
    }

    /**
     * Get all books
     *
     * @return Book
     */
    public static function getBook(Book $book): Book
    {
        return Book::find($book->id);
    }

    /**
     * Add book
     *
     */
    public static function addBook(Request $request) {
        $validator = \Validator::make($request->all(), [
            'bookName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $book = new Book; // ORM(with Laravel)
        $book->title = $request->bookName;
        $book->save();
    }

    /**
     * Update book
     *
     */
    public static function updateBook(Book $book) {
        $validator = \Validator::make($request->all(), [
            'bookName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $book = new Book; // ORM(with Laravel)
        $book->title = $request->bookName;
        $book->save();
    }

    /**
     * Delete book
     *
     * @return Book
     */
    public static function deleteBook(Book $book): void {
        $book->delete();
    }
}
