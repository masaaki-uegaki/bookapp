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
     * @return Book
     */
    public static function getBooks()
    {
        return Book::all();
    }

    /**
     * Add book
     *
     * @return Book
     */
    public static function addBook(Request $request) {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $book = new Book; // ORM(with Laravel)
        $book->title = $request->name;
        $book->save();
    }

    /**
     * Delete book
     *
     * @return Book
     */
    public static function deleteBook(Book $book) {
        $book->delete();
    }
}
