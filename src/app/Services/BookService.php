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
        if (self::validateBook($request) != null) {
            return;
        }

        $book = new Book; // ORM(with Laravel)
        $book->bookName = $request->bookName;
        $book->save();
    }

    /**
     * Update book
     *
     */
    public static function updateBook(Request $request, Book $book) {
        if (self::validateBook($request) != null) {
            return;
        }

        $book->bookName = $request->bookName;
        $book->save();
    }

    /**
     * Delete book
     *
     * @return void
     */
    public static function deleteBook(Book $book): void {
        $book->delete();
    }

    /**
     * Validate book
     *
     * @return void
     */
    private static function validateBook(Request $request) {
        $validator = \Validator::make($request->all(), [
            'bookName' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        return;
    }
}
