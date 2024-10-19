import threading

# Define a custom class that extends Thread
class MyThread(threading.Thread):
    def __init__(self, name):
        threading.Thread.__init__(self)
        self.name = name

    def run(self):
        for i in range(1, 6):
            print(f"{self.name}: Count {i}")

# Create two instances of the MyThread class
thread1 = MyThread("Thread 1")
thread2 = MyThread("Thread 2")

# Start the threads
thread1.start()
thread2.start()

# Wait for both threads to finish before continuing
thread1.join()
thread2.join()

# Print a message to indicate that the program has finished
print("Program finished.")