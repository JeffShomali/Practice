//(1) creat ViewModel is like document ready in jquery
var ViewModel = function() {

    //(3) example of model inside the ViewModel buf in functuality this is sperate
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

    } , this);


    this.incrementCounter = function() {
        this.clickCount(this.clickCount() + 1); // its like var count = 0; count++;

    };

}

//(2) do applyBindings
ko.applyBindings(new ViewModel()

);
