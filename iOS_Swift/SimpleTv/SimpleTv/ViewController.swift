//
//  ViewController.swift
//  SimpleTv
//
//  Created by Jeff on 10/2/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class ViewController: UIViewController, UITableViewDataSource,UITableViewDelegate {
   
    //Array of 10 items
    var myStuff = ["coin", "gourd","city","rock","farm","forest","lotus","teapot","yosemite","trinity"]
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return myStuff.count
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

