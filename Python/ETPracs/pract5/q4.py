from tkinter import *
class MyApp(Frame):
    def __init__(self, master):
        Frame.__init__(self, master)
        self.grid()
        self.create_widget()
    def create_widget(self):
        self.instruction_label = Label(self, text = "Only authorised person are allowed.")
        self.instruction_label.grid(row=0, column=0, columnspan=2, sticky=W)
        self.password_label = Label(self, text = "Enter Password")
        self.password_label.grid(row=1, column=0, sticky=W)
        self.password_entry = Entry(self)
        self.password_entry.grid(row=1, column=1, sticky=W)
        self.submit_button = Button(self, text = "Login", command=self.reveal)
        self.submit_button.grid(row=2, column=0, sticky=W)
        self.secret_text = Text(self, width=35, height=5, wrap=WORD)
        self.secret_text.grid(row=3, column=0, columnspan=2, sticky=W)
    def reveal(self):
        contents = self.password_entry.get()
        if contents == "student":
            message = "Congrats!\nYou are the authorised person.\nWelcome sir."
        else:
            message = "Wrong password!\nYou are not authorised to access."
        self.secret_text.delete(0.0, END)
        self.secret_text.insert(0.0, message)
mainWindow = Tk()
mainWindow.title("Authentication")
mainWindow.geometry("300x200")
app = MyApp(mainWindow)
mainWindow.mainloop()
