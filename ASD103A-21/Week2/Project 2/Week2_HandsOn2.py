"""
File: arrays.py
Project 4.2
 
Adds a precondition on __getitem__ and __setitem__
and raises an exception if it is not satisfied.

An Array is a restricted list whose clients can use
only [], len, iter, and str.

To instantiate, use

<variable> = array(<capacity>, <optional fill value>)

The fill value is None by default.
"""

class Array(object):
    """Represents an array."""

    def __init__(self, capacity, fillValue = None):
        """Capacity is the static size of the array.
        fillValue is placed at each position."""
        self.items = list()
        self.logicalSize = 0
        for count in range(capacity):
            self.items.append(fillValue)

    def __len__(self):
        """-> The capacity of the array."""
        return len(self.items)

    def __str__(self):
        """-> The string representation of the array."""
        return str(self.items)

    def __iter__(self):
        """Supports traversal with a for loop."""
        return iter(self.items)

    def __getitem__(self, index):
        """Subscript operator for access at index.
        Precondition: 0 <= index < size()"""
        # Write your code here
        if (0 <= index  and index < self.logicalSize):
            return self.item[index]
        else:
            raise Exception(f'Index is out of range')


    def __setitem__(self, index, newItem):
        """Subscript operator for replacement at index.
        Precondition: 0 <= index < size()"""
        # Write your code here 
        if (0 <= index  and index < self.logicalSize):
            self.item[index] = newItem
        else:
            raise Exception(f'Index is out of range')
        

    def size(self):
        """-> The number of items in the array."""
        return self.logicalSize


def main():
    """Test code for modified Array class."""
    a = Array(10)
    print("Physical size:", len(a))
    print("Logical size:", a.size())
    print("Items:", a)
    print(a[0])

if __name__ == "__main__":
    main()
