import React from 'react';
import ReactDOM from 'react-dom';
import { Router, Route, IndexRoute, hashHistory } from "react-router";

import Archives from "./pages/Archives";
import Featured from "./pages/Featured";
import Layout from "./pages/Layout";
import Settings from "./pages/Settings";

//import Poster from "./Poster";
/*
export class App extends React.Component {
  
  render() {
    return (
      <div>
        <h1>The App...</h1>
        
      </div>
    );
  }
  
  
}*/
const app = document.getElementById('app');
//ReactDOM.render(<App/>, document.getElementById('app'));
ReactDOM.render(
  <Router history={hashHistory}>
    <Route path="/" component={Layout}>
      <IndexRoute component={Featured}></IndexRoute>
      <Route path="archives(/:article)" name="archives" component={Archives}></Route>
      <Route path="settings" name="settings" component={Settings}></Route>
    </Route>
  </Router>,
app);