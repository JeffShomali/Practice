
# Section 3
###### Run the Express
1. Create `package.json` file with -> `npm init`  
2. Install Express with this `npm install express@4 --save` --save option is saving express dependency into packaje.json and later in other machine can install easily install all the dependencies with `npm install` command
3. Creating `server.js` file on root and add express `.listen()` method to listen *public* folder index.html file
4. Start the server with `node server.js`


###### Hello React
1. Include 3 scripts into head : `bable`(covert JSX into Javascript), `react` and `react-dom`
2. Create a `App` container and create script tag with `text/babel` attribute
3. Create a file in public folder and call it `app.jsx` and use `reactDOM.render()` method to display on the screen
4. Import into footer with `src="app.jsx"`
5. Run the server again `node server.js`

###### First React Component
1. Add `React.createClass()` and `render` and `return` into App.jsx
2. Passing Components into `ReactDOM.render(<MyComponet.> ...)`

###### Learning JSX
1. Practicing JSX in [babeljs.io/repl/](http://babeljs.io/repl/)
     When using JSX no need to use `react.createElement()` because Babel compiling JSX
###### Component Properties (Props)
1. *Passing* props into components  just pass it into the `<Components name="Jeff"/>` or use JS expression `{}` for passing initiated value `(var val = "Jeff")`

2. *Access* before return function within React.createClass() by using `var name = this.props.name;` and use JS expression `{propname}` in render\return method.
3. Use default value in case if props not passed into component by using `getDefaultProps: function (){}`

###### User Events & Callbacks (Form)
1. *Accessing passed form* values
- create a function within component and name `onButtonClick: function (e){e.preventDefault();}` prevent default submitting.
- Add `ref="passing Value"` *ref* is like `ID` into field and `onSubmit={this.onButtonClick}` event listener into our form
- Get the values within function `var name = this.refs.name.value`

###### State (Form)
*props* vs *state* both are using for accessing data. Props used for passing  initialized data to component, but state used for not initialized data like getting form values, and use for maintained components values. Components shouldn't update props, but it updating state. Basically state updating initialized props.

1. *Accessing* passed form values by using `getInitialState()` its similar to getDefaultProps, but instead of using this.props.name in component/render function we should use `this.state.name` to fetch the value.
2. Then use `this.setState({})` to update initiated props value and render parts of component.
3. Clear the form after submitted by adding `this.refs.name.value = '';` into event handeling function.

###### Nested Component
1. Create another component like level one
2. Pass it into the main app component (`App.jsx render`) method
3. Passing form value to another component:
- add event handler on form component like `<form onSubmit={this.onFormSubmit}>` then access to data inside created function, int his case `onFormSubmit: function (e){}` then validate data and lastly passing into parent component handling method in this case `handleNewName` and use `setState` to change the props value.
