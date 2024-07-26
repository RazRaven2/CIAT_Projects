
class Dogs:
     """Parent class for dog breeds"""
     def speak(self):
          print ("woof")
     def likes_walks(self):
          return True

class Poodle(Dogs):
     def __init__(self, name):
          self.name = name

class GoldenRetriever(Dogs):
     def __init__(self, name):
          self.name = name

class Samoyed(Dogs):
     def __init__(self, name):
          self.name = name

#Test for inheritance 
def main():
     
     pups = []
     
     pups.append(Poodle('Bella'))
     pups.append(GoldenRetriever('Roger'))
     pups.append(Samoyed('Vernon'))

     for dog in pups:
          dog.speak()

     for dog in pups:
          if dog.likes_walks():
               print(dog.name + " likes walks")
          else:
               print("No walks today.")     


if __name__ == '__main__':
     main()