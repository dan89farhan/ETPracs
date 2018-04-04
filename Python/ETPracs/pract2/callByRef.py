def funcByRef(mylist):
    mylist.append(["You","Are","Awesome"])
    print("New List :- \n",mylist)
    return
mylist=["Hi","There"]
print("Original List :- \n",mylist)
funcByRef(mylist)
