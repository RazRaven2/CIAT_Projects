

full_name = input("Enter Full Name: ")
names = full_name.split()
name = [name[0].upper() + "." for name in names]
intials = " ".join(name)
print(intials) 