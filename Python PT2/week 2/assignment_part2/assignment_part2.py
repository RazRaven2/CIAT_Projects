#After reading the instructions, utilize user-defined functions and function calls by completing the coding assignments listed below.
#Given the following two lists: lst1, lst2
#Write a small program which:
#(1) determines which list is shorter
#(2) prints the last element from the shorter list


def main():
     lst1 = ['salamander','triceratops','cheetah','puma']
     lst2 = ['banana','banana','banana','banana','orange you glad I didn\'t say banana?']
     compare_lst(lst1, lst2)

def compare_lst(lst1, lst2):
     if len(lst1) < len(lst2):
          print("List 1 is shorter")
          lst1.reverse()
          print(lst1[0])
     elif len(lst1) > len(lst2):
          print("List 2 is shorter")
          lst2.reverse()
          print(lst2[0])
     else:
          print("The Lists are equal")
     




if __name__ == "__main__":
     main()