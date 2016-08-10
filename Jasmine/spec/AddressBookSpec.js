describe('Address Book', function() {
    var addressBook, thisContact;


    beforeEach(function() {
        addressBook = new AddressBook();
        thisContact = new Contact();
    });



    //expect (1)
    it('should be able to add a contact', function() {
        addressBook.addContact(thisContact); // call addContact method  this method should be in AddressBook claass

        //testing method each test should have expect method
        expect(addressBook.getContact(0)).toBe(thisContact);
    }); // end of first expect

    //expect (2)
    it('should be able to delete a contact', function() {
        addressBook.addContact(thisContact);
        addressBook.deleteContact(0);

        //testing function
        expect(addressBook.getContact(0)).not.toBeDefined();
    });

}); //end of first wrapper describe


// Another Describe For  Writing An Asynchronous Test
describe('Async Address Book', function() {
    var addressBook = new AddressBook();

    //done() function used for Asynchronous test
    //done() signals to the frameworks when Asynchronous function has completed
    beforeEach(function(done) {
        addressBook.getInitialContacts(function() {
            done();
        });
    });

    it('should grab initial contacts', function(done) {
        expect(addressBook.initialComplete).toBe(true);
        done();
    });

}); //end second describe
