//  ViewController.swift
//  SimpleTv
//  Created by Jeff on 10/2/16.
//  Copyright © 2016 Jeff. All rights reserved.

import UIKit

class ViewController: UIViewController, UITableViewDataSource,UITableViewDelegate {
   
    //Array of 10 items
    var myStuff = ["Acrobatics",
                   "Beach Soccer",
                   "Beach Volleyball",
                   "Bodyboard","Canoe Slalom",
                   "Curls With Dumbbells",
                   "Cycling Mountain Bike",
                   "Cycling Road",
                   "Cycling Track",
                   "Diving",
                   "Equestrian",
                   "Exercise",
                   "Fencing",
                   "Frisbee",
                   "Golf",
                   "Handball",
                   "Judo",
                   "Kitesurfing",
                   "Swimming",
                   "Pilates",
                   "Ping Pong",
                   "Pullups",
                   "Rowing 2",
                   "Rugby Sevens",
                   "Running",
                   "Sailing"]
    
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return myStuff.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cellIdentifier = "Cell"
        
        //identify how the table can display in our rows
        let cell =  tableView.dequeueReusableCell(withIdentifier: cellIdentifier, for: indexPath) as UITableViewCell
        cell.textLabel?.text = myStuff[indexPath.row]
        cell.imageView?.image = UIImage(named:"Acrobatics")
        return cell
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

