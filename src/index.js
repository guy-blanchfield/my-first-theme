// if we're doing any sass / scss this would be the place to import the index sass
// e.g.
// import '../style/index.scss';

// let's see if it works for plain css...
// hmm works for style, but not reset
import "../css/reset.css";
import "../css/style.css";

// import any js modules
import testScript from "./modules/test-script";

// run the test script function
testScript();
