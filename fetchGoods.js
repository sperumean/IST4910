// The data variable will be replaced by the Python script
const data = {
  "goods": [
    {
      "ID": 1,
      "Name": "Methylamine",
      "Category": "Chemicals",
      "Price": 5000.0,
      "StockQuantity": 10
    },

    {
      "ID": 15,
      "Name": "Chemical Resistant Boots",
      "Category": "Protective Gear",
      "Price": 70.0,
      "StockQuantity": 25
    }
  ],
  "suppliers": [
    {
      "SupplierID": 1,
      "SupplierName": "Los Pollos Supplies",
      "ContactNumber": "555-1234"
    }
  ]
};


exports.handler = async function(event, context) {
    console.log('Function executed. Event:', JSON.stringify(event));

    try {
	console.log('Data available. Number of goods:', data.goods.length);

        return {
            statusCode: 200,
            body: JSON.stringify(data)
        };
    } catch (error) {
        console.error("Error in function:", error);
        return {
            statusCode: 500,
            body: JSON.stringify({ error: 'Function execution failed', details: error.message })
        };
    }
};

