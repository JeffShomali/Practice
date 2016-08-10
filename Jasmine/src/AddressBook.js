//constructor function
function AddressBook() {
    this.contacts = []; // holding contacts array
    this.initialComplete = false; // for testing Asynchronous code
}

//Testing Asynchronous Code function
AddressBook.prototype.getInitialContacts = function(cb) {
    var self = this;

    setTimeout(function() {
        self.initialComplete = true;
        if (cb) {
            return cb();
        }
    }, 3);

};



AddressBook.prototype.addContact = function($contact) {
    this.contacts.push($contact);
};


AddressBook.prototype.getContact = function($index) {
    return this.contacts[$index];
};

AddressBook.prototype.deleteContact = function($index) {
    this.contacts.splice($index, 1);
};
