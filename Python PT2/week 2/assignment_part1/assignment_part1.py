#3. Assume the list numbers1 has 100 elements, and numbers2 is an empty list. Write code that copies the values in numbers1 to numbers2.

def main():
     numbers1 = [1]*100
     numbers2 = []

     for number in numbers1:
          numbers2.append(number)

     for number2 in numbers2:
          print(numbers2)

if __name__ == "__main__":
     main()