import Users from "./components/cards";
import './App.css';
import React, { Component } from 'react'
import pic from './imgl.jpeg'

class App extends Component {
    constructor(props) {
        super(props)

        // Set initial state
        this.state = {
            users_data: ([]),
            loading: false
        }


        this.updateState = this.updateState.bind(this)
    }

    updateState() {

        this.setState({ loading: true });

        setTimeout(async function () {

            const response = await fetch("https://reqres.in/api/users");
            const jsonresponse = await response.json();
            console.log(jsonresponse)
            this.setState({ users_data: jsonresponse["data"], loading: false });
        }.bind(this), 2000);
    }
    
    
    render() {
        
        return (
            
            <> 
                <nav className="bar" >
                    <div className="digis">
                    <img src={pic} style={{width: 200}} alt=""/>
                        <button className="fetchusers" onClick={this.updateState} > Get Users </button>

                    </div>
                </nav>
                
                <div className="userdatacontainer">
                    <

                        Users loading={this.state.loading}
                        users={this.state.users_data}
                    />
                </div >
                <div class="footer">
                <p className='copy' >© Copyright 2021. All Rights Reserved. Made by CHUJEETHA R </p>
                </div>

            </>
        );
    }
}

export default App;