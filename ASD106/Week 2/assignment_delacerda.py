# Import required module for threading
import threading
import time

# Define a custom class that extends Thread
    # Constructor
        # Call the constructor of the superclass
        # Set the name and num attributes
        # Set the finished attribute to False
class MyThread(threading.Thread):
    def __init__(self, name, number):
        threading.Thread.__init__(self)
        self.name = name
        self.num = int(number)
        self.finished = False

    # Main thread method
        # Loop from num to 0
           # Print the countdown
           # Sleep for one second
           # Set the finished attribute to True

    def run(self):
        for i in reversed(range(0, self.num)):
            print(f"{self.name}: Count {i}")
            time.sleep(1)
            if (i==0):
                self.finished = True


    # Additional method to check if thread has finished
    def is_finished(self):
        if (self.finished):
            print(self.name + " complete.")
   

# Create five instances of the MyThread class
thread1 = MyThread("Thread 1", 5)
thread2 = MyThread("Thread 2", 5)
thread3 = MyThread("Thread 3", 5)
thread4 = MyThread("Thread 4", 5)
thread5 = MyThread("Thread 5", 5)


# Start the threads
thread1.start()
thread2.start()
thread3.start()
thread4.start()
thread5.start()


# Wait for both threads to finish before continuing
thread1.join()
thread2.join()
thread3.join()
thread4.join()
thread5.join()


# Check if each thread has finished
thread1.is_finished()
thread2.is_finished()
thread3.is_finished()
thread4.is_finished()
thread5.is_finished()

# Print a message to indicate that the program has finished
print("Program finished.")