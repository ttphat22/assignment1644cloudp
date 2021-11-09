const mongoose = require('mongoose');


var productSchema = new mongoose.Schema({
    productID: {
        type: String,
        required: 'This field is required'
    },
    productName: {
        type: String,
        required: 'This field is required'
    },
    productCategory: {
        type: String,
        required: 'This field is required'
    },
    productDescription: {
        type: String,
        required: 'This field is required'
    },
    productPrice: {
        type: Number,
        required: 'This field is required'
    },
    productQuantity: {
        type: Number,
        required: 'This field is required'
    },
    image: {
        type: String,
        required: 'This field is required' 
    }
    
})

// custom validation for email


mongoose.model('Products', productSchema);