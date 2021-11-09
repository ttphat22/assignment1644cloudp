const express = require('express');
const mongoose = require('mongoose');
const multer = require('multer');
var path = require('path')

const Product = mongoose.model('Products');
const router = express.Router();
//image start
var Storage= multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, './public/uploads/')
      },
      filename: function (req, file, cb) {
        cb(null, Date.now() + path.extname(file.originalname)) //Appending extension
      }
})

var upload = multer({
    storage:Storage
}).single('file');
//image end


router.get('/', (req, res) => {
    if (req.query.search){
        const regex= new RegExp(escapeRegex(req.query.search),'gi');
        Product.find({productName:regex},(err, docs) => {
            if (!err) {
                res.render("product/manage_product", {
                    list: docs
                })
            }
        })
    }else {
        Product.find((err, docs) => {
            if (!err) {
                res.render("product/manage_product", {
                    list: docs
                })
            }
        })
    }
    
})


router.get("/add_product", (req, res) => {
    res.render("product/add_product", {
        viewTitle: "Insert Product"
    })
})

router.post("/",upload, (req, res) => {
   
        insertRecord(req, res);

})

function insertRecord(req, res) {
    var product = new Product();

   product.productID = req.body.productID;

   product.productName = req.body.productName;

   product.productCategory = req.body.productCategory;

   product.productDescription = req.body.productDescription;

   product.productPrice = req.body.productPrice;

   product.productQuantity = req.body.productQuantity;

   product.image = req.file.filename;
   //image
    //    uploadController.uploadFile;
   //image

   product.save((err,doc) => {
       if(!err){
        res.redirect('/');
       }
       else{
           
          if(err.name == "ValidationError"){
              handleValidationError(err,req.body);
              res.render("product/add_product",{
                  viewTitle:"Insert Product",
                  product:req.body
              })
          }

          console.log("Error occured during record insertion" + err);
       }
   })
}

//update
router.get("/update_product/:id", (req, res) => {
    Product.findById(req.params.id, (err, doc) => {
        if (!err) {
            res.render("product/update_product", {
                viewTitle: "Update Product",
                product: doc
            })
        }
    })
})
router.post("/update_product",upload, (req, res) => {

        updateRecord(req, res);
    
})
function updateRecord(req, res) {
    if (req.file){
var dataRecords={
    productID : req.body.productID,

    productName : req.body.productName,

    productCategory : req.body.productCategory,

    productDescription : req.body.productDescription,

    productPrice : req.body.productPrice,

    productQuantity : req.body.productQuantity,

    image : req.file.filename,
}
    }else {
        var dataRecords={
            productID : req.body.productID,
        
            productName : req.body.productName,
        
            productCategory : req.body.productCategory,
        
            productDescription : req.body.productDescription,
        
            productPrice : req.body.productPrice,
        
            productQuantity : req.body.productQuantity,
        
           
        }
    }
    var update=Product.findOneAndUpdate(req.body.id,dataRecords);
    update.exec(function(err,data){
        if (!err) {
            res.redirect('/');
        }
        else {
            if (err.name == "ValidationError") {
                handleValidationError(err, req.body);
                res.render("product/update_product", {
                    viewTitle: 'Update Product',
                    employee: req.body
                });
            }
            else {
                console.log("Error occured in Updating the records" + err);
            }
        }
    })
}

//delete
router.get("/delete_product/:id", (req, res) => {
    Product.findByIdAndRemove(req.params.id, (err, doc) => {
        if (!err) {
            res.redirect('/');
        }
        else {
            console.log("An error occured during the Delete Process" + err);
        }
    })

})


//view product
router.get("/view_product/:id", (req, res) => {
    Product.findById(req.params.id, (err, doc) => {
        if (!err) {
            res.render("product/view_product", {
                viewTitle: "View Product",
                product: doc
            })
        }
    })
})

//index Product
router.get('/indexProduct', (req, res) => {
    if(req.query.search){
        const regex= new RegExp(escapeRegex(req.query.search),'gi');
        Product.find({productName:regex},(err, docs) => {
            if (!err) {
                res.render("index/indexProduct", {
                    list: docs
                })
            }
        })
    }
    else{
        Product.find((err, docs) => {
            if (!err) {
                res.render("index/indexProduct", {
                    list: docs
                })
            }
        })
    }
    
})


function handleValidationError(err, body) {
    for (field in err.errors) {
        switch (err.errors[field].path) {
            case 'productID':
              body['productIDError'] = err.errors[field].message;
              break;
        
            case 'productName':
                body['productNameError'] = err.errors[field].message;
                break;
            case 'productCategory':
                body['productCategoryError'] = err.errors[field].message;
                break;
            case 'productDescription':
                body['productDescriptionError'] = err.errors[field].message;
                break;
            case 'productPrice':
                body['productPriceError'] = err.errors[field].message;
                break;
            case 'productQuantity':
                body['productQuantityError'] = err.errors[field].message;
                break;
            case 'productImage':
                body['productImageError'] = err.errors[field].message;
                break;

            default:
                break;
        }
    }
}

//search replace text
function escapeRegex(text) {
return text.replace(/[-[\]{}()*+.,\\^$|#\s]/g,"\\$&");
}

module.exports = router;


