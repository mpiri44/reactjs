import React from 'react';
import ReactDOM from 'react-dom';
import PropTypes from 'prop-types';

class Main extends React.Component{
    constructor(props){
         super(props);
         this.state = {products : []}
    }
    componentDidMount(){
        fetch('http://localhost:8000/api/products')
            .then(response => {
                console.log(response);
                return response.json();
            })
            .then(products => {
                //Fetched product is stored in the state
                this.setState({ products });
            });
    }

    renderProducts(){
        return this.state.products.map((product) => {
            <li key={product.id}>{product.title}</li>
        });
    }

    render(){
        return (
            <div>
                <h3>All Products</h3>
                <ul>
                    {this.renderProducts()}
                </ul>
            </div>
        );
    }
}
// if(document.getElementById('container'))
//     ReactDOM.render(<Main/>,document.getElementById('container'));











