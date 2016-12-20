//  CafeTableViewController.swift
//  CafePin
//  Created by Jeff on 10/2/16.
//  Copyright © 2016 Jeff. All rights reserved.
//

import UIKit

class CafeTableViewController: UITableViewController {

    var cafeNames     = ["Cafe Deadend", "Homei", "Teakha", "Cafe Loisl", "Petite Oyster", "For Kee Restaurant", "Po's Atelier", "Bourke Street Bakery", "Haigh's Chocolate", "Palomino Espresso", "Upstate", "Traif", "Graham Avenue Meats", "Waffle & Wolf", "Five Leaves", "Cafe Lore", "Confessional", "Barrafina", "Donostia", "Royal Oak", "Thai Cafe"]
    var cafeImages    = ["cafedeadend.jpg", "homei.jpg", "teakha.jpg", "cafeloisl.jpg", "petiteoyster.jpg", "forkeerestaurant.jpg", "posatelier.jpg", "bourkestreetbakery.jpg", "haighschocolate.jpg", "palominoespresso.jpg", "upstate.jpg", "traif.jpg", "grahamavenuemeats.jpg", "wafflewolf.jpg", "fiveleaves.jpg", "cafelore.jpg", "confessional.jpg", "barrafina.jpg", "donostia.jpg", "royaloak.jpg", "thaicafe.jpg"]
    var cafeLocations = ["Hong Kong", "Hong Kong", "Hong Kong", "Hong Kong", "Hong Kong", "Hong Kong", "Hong Kong", "Sydney", "Sydney", "Sydney", "New York", "New York", "New York", "New York", "New York", "New York", "New York", "London", "London", "London", "London"]
    var cafeTypes     = ["Coffee & Tea Shop", "Cafe", "Tea House", "Austrian / Causual Drink", "French", "Bakery", "Bakery", "Chocolate", "Cafe", "American / Seafood", "American", "American", "Breakfast & Brunch", "Coffee & Tea", "Coffee & Tea", "Latin American", "Spanish", "Spanish", "Spanish", "British", "Thai"]
    var cafeIsVisited = [Bool](repeating:false, count: 21)
    
   
    override func viewDidLoad() {
        super.viewDidLoad()

        self.navigationItem.backBarButtonItem = UIBarButtonItem(title: "", style: .plain, target:nil, action: nil)
        // Uncomment the following line to preserve selection between presentations
        // self.clearsSelectionOnViewWillAppear = false

        // Uncomment the following line to display an Edit button in the navigation bar for this view controller.
        // self.navigationItem.rightBarButtonItem = self.editButtonItem()
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    // MARK: - Table view data source

    override func numberOfSections(in tableView: UITableView) -> Int {
        // #warning Incomplete implementation, return the number of sections
        return 1
    }

    override func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        // #warning Incomplete implementation, return the number of rows
        return self.cafeNames.count
    }

    // Configure the cell...
    override func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
       let cellIndentifier = "Cell"
        let cell = tableView.dequeueReusableCell(withIdentifier: cellIndentifier, for: indexPath) as! CustomTableViewCell

        //Display each cell data
        cell.nameLabel.text = cafeNames[indexPath.row]
        cell.thumbnailImageView.image = UIImage(named: cafeImages[indexPath.row])
        cell.locationLabel.text = cafeLocations[indexPath.row]
        cell.typeLabel.text = cafeTypes[indexPath.row]
        
        //Thumbnail radios
        cell.thumbnailImageView.layer.cornerRadius = cell.thumbnailImageView.frame.size.width/2
        cell.thumbnailImageView.clipsToBounds = true
        cell.favoriteImageView.isHidden  = !self.cafeIsVisited[indexPath.row]

        
        return cell
    }
    

    
    
       
    
    /*
    // Override to support conditional editing of the table view.
    override func tableView(_ tableView: UITableView, canEditRowAt indexPath: IndexPath) -> Bool {
        // Return false if you do not want the specified item to be editable.
        return true
    }
    */

    
    // Override to support editing the table view.
    override func tableView(_ tableView: UITableView, commit editingStyle: UITableViewCellEditingStyle, forRowAt indexPath: IndexPath) {

    }
 
    override func tableView(_ tableView: UITableView, editActionsForRowAt indexPath: IndexPath) -> [UITableViewRowAction]? {
        let shareAction    = UITableViewRowAction(style: UITableViewRowActionStyle.default, title: "Share", handler: {(action: UITableViewRowAction, indexPath: IndexPath!)->Void in
        let shareMenu = UIAlertController(title: nil, message: "Share Using", preferredStyle: .actionSheet)
        let facebookAction = UIAlertAction(title: "facebook", style: UIAlertActionStyle.default, handler: nil)
        let twitterAction  = UIAlertAction(title: "twitter", style: UIAlertActionStyle.default, handler: nil)
        let cancelAction   = UIAlertAction(title: "cancel", style: UIAlertActionStyle.cancel, handler: nil)
            shareMenu.addAction(facebookAction)
            shareMenu.addAction(twitterAction)
            shareMenu.addAction(cancelAction)
            self.present(shareMenu, animated: true, completion: nil)
        }
        )
        
            let deleteAction = UITableViewRowAction(style: UITableViewRowActionStyle.default, title: "Delete", handler: {(action: UITableViewRowAction, indexPath: IndexPath!)->Void in
            self.cafeNames.remove(at: indexPath.row)
            self.cafeLocations.remove(at: indexPath.row)
            self.cafeTypes.remove(at: indexPath.row)
            self.cafeIsVisited.remove(at: indexPath.row)
            self.cafeImages.remove(at: indexPath.row)
            tableView.deleteRows(at: [indexPath], with: .fade)

        }
        )
        
        shareAction.backgroundColor = UIColor.blue
        return [deleteAction, shareAction]
    }

    /*
    // Override to support rearranging the table view.
    override func tableView(_ tableView: UITableView, moveRowAt fromIndexPath: IndexPath, to: IndexPath) {

    }
    */

    /*
    // Override to support conditional rearranging of the table view.
    override func tableView(_ tableView: UITableView, canMoveRowAt indexPath: IndexPath) -> Bool {
        // Return false if you do not want the item to be re-orderable.
        return true
    }
    */

  
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
        
        if segue.identifier == "showCafeDetail" {
            if let indexPath = self.tableView.indexPathForSelectedRow {
               let destinationController = segue.destination as! DetailViewController
                destinationController.cafeImage = self.cafeImages[indexPath.row]
                destinationController.cafeName  = self.cafeNames[indexPath.row]
                destinationController.cafeLocation = self.cafeLocations[indexPath.row]
                destinationController.cafeType = self.cafeTypes[indexPath.row]
                
        }
    }
    
}
    
}//end
