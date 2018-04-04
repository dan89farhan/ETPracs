from tkinter import Tk, Frame, Label
mainWin = Tk()
mainWin.title("python label")
mainWin.geometry("400x200")
myApp = Frame(mainWin)
myApp.grid()
lab = Label(myApp, text = "Hello!, How are you?.")
lab.grid()
mainWin.mainloop()
