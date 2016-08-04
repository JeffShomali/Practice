var initialCats = [
    {
        clickCount: 0,
        name: 'Coco',
        imgSrc: 'img/434164568_fea0ad4013_z.jpg',
        imgAttribution: 'https://www.flickr.com/photos/bigtallguy/434164568',
        nicknames: ['Tiger', 'Hero', 'Cat']
    },
    {
        clickCount: 0,
        name: 'Bella',
        imgSrc: 'img/4154543904_6e2428c421_z.jpg',
        imgAttribution: 'https://www.flickr.com/photos/xshamx/4154543904',
        nicknames: ['Tigger','Fighter']
    },
    {
        clickCount: 0,
        name: 'Pashmak',
        imgSrc: 'img/22252709_010df3379e_z.jpg',
        imgAttribution: 'https://www.flickr.com/photos/kpjas/22252709',
        nicknames: ['Khasste', ['Malang']]
    },
    {
        clickCount: 0,
        name: 'Panbeh',
        imgSrc: 'img/1413379559_412a540d29_z.jpg',
        imgAttribution: 'https://www.flickr.com/photos/malfet/1413379559',
        nicknames: ['Sar Behava']
    },
    {
        clickCount: 0,
        name: 'Mansouri',
        imgSrc: 'img/9648464288_2516b35537_z.jpg',
        imgAttribution: 'https://www.flickr.com/photos/onesharp/9648464288',
        nicknames: ['Bazigoosh']
    }
];

// passing object literral {} into Cat fuunction
var Cat = function(data) {
    this.clickCount = ko.observable(data.clickCount); // this is like var clickCount = 0;
    this.name       = ko.observable(data.name);
    this.imgsrc     = ko.observable(data.imgSrc);
    // this.imgAttribuation = ko.observable(data.imgAttribuation);
    this.nicknames  = ko.observableArray(data.nicknames);

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

       this.catList = ko.observableArray([]); //Empty Array for contain cat object literal

       initialCats.forEach(function(catItem) {
        self.catList.push(new Cat(catItem));
    });

      //this is set of data for anytime we making cat
     this.currentCat = ko.observable( this.catList()[0] ); //Cat is not in view modeel anymore, is in currentCat observale

     // Click counter
     this.incrementCounter = function() {
        self.currentCat().clickCount(self.currentCat().clickCount() + 1);
    };

    this.changeCat = function(cat) {
       self.currentCat(cat);
   };

};

//(2) do applyBindings
ko.applyBindings(new ViewModel());
