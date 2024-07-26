# After reading instructions, complete Algorithm Workbench Chapter 10 - Question  2.
# Write a class definition named Book. The Book class should have data attributes for a book’s title, the author’s name, and the publisher’s name. The class should also have the following:
# An _ _init_ _ method for the class. The method should accept an argument for each of the data attributes.
# Accessor and mutator methods for each data attribute.
# An _ _str_ _ method that returns a string indicating the state of the object.

class Book:
     def __init__(self):
          self._title = "title"
          self._author = "author"
          self._publisher = "publisher"

     @property
     def title(self):
          return self._title
     @title.setter
     def title(self, value):
          self._title = value

     @property
     def author(self):
          return self._author
     @author.setter
     def author(self, value):
          self._author = value

     @property
     def publisher(self):
          return self._publisher
     @publisher.setter
     def publisher(self, value):
          self._publisher = value

     def __str__(self):
          return "\n".join([
               f"Title: {self._title}",
               f"Author: {self._author}",
               f"Publisher: {self._publisher}",
          ])

#main function
if __name__ == "__main__":
     my_book = Book()
     my_book.title = input("Enter title: ")
     my_book.author = input("Enter author: ")
     my_book.publisher = input("Enter publisher: ")

     print(my_book)
     

     