var Cat = function() {
    this.clickCount = ko.observable(0); // this is like var clickCount = 0;
    this.name = ko.observable('Tabby');
    this.imgsrc = ko.observable('img/434164568_fea0ad4013_z.jpg');
    this.imgAttribuation = ko.observable('https://www.flickr.com/photos/big');
    this.nicknames = ko.observableArray(['Coco', 'Bella', 'Mansour', 'Panbeh'])

    // Title Binding
    this.title = ko.computed(function() {
        var title;
        var clicks = this.clickCount();
        if (clicks < 10) {
            title = 'Newborn';
        } else if (clicks < 20) {
            title = 'Infant';
        } else if (clicks < 30) {
            title = 'Child';
        } else if (clicks < 40) {
            title = 'Teen';
        } else {
            title = "Ninja";
        }
        return title;

    }, this);



}


var ViewModel = function() {
      var self = this; //self evertime refer to this ViewModel.  self.currentCat().clickCount means this.currentCat().clickCount()

     this.currentCat = ko.observable( new Cat() ); //Cat is not in view modeel anymore, is in currentCat observale

     this.incrementCounter = function() {
     self.currentCat().clickCount(self.currentCat().clickCount() + 1); // its like var count = 0; count++;

     };
};

//(2) do applyBindings
ko.applyBindings(new ViewModel());
