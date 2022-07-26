
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
  <h1>Simple Accordions</h1>

  <button class="accordion">Website Design and Development</button>
  <div class="accordion-content">
    <p>
      Whether you need a wordpress website, a shopify site, or a custom fullstack application, we got you! No matter what kind of website or application you need, it will be made with clean and maintable code that follows modern development standards. We also have top notch designers that can make unique designs that will make your website look different and unique. Not to mention that we also provide 24/7 website maintenance so that you get all the support you need.
    </p>
  </div>

  <button class="accordion">Website Analytics and Performance</button>
  <div class="accordion-content">
    <p>
      We believe that in order to have a successful website, you need to constantly adjust and adapt to the data provided by your website visitors. Here at Pierre Web Development, we have narrowed down the specific key performance indicators that will dramatically boost your success with connecting to target markets. We will provide a basic metric dashboard based on how much traffic your site gets, detailed analytical reports that show which parts of your website is the most popular among visitors as well as access to tools you can use to make meaningful decisions based on this data.
    </p>
  </div>

  <button class="accordion">Digital Marketing</button>
  <div class="accordion-content">
    <p>
      We know that every great website focuses on helping you get more business and building a brand that your ideal customers will love and support. We can help you set up a great, SEO-focused content strategy, a paid ads campaign, email marketing integration with Mailchimp as well as a social media marketing campaign. We also use popular website analytic tools to track your site's performance and provide you with weekly analytic reports to help bolster your growth.
    </p>
  </div>
</div>


<style>
/* body {
  background-color: #6DC4F4;
}h1 { 
     color:white;
 
} */

.container {
  width: 100%;
  max-width: 1000px;
  margin: 50px auto;
}

button.accordion {
  width: 100%;
  background-color: whitesmoke;
  border: none;
  outline: none;
  text-align: left;
  padding: 15px 20px;
  font-size: 18px;
  color: #333;
  cursor: pointer;
  transition: background-color 0.2s linear;
}

button.accordion:after {
  font-family: FontAwesome;
  content: "\f150";
  font-family: "fontawesome";
  font-size: 18px;
  float: right;
}

button.accordion.is-open:after {
  content: "\f151";
}

button.accordion:hover,
button.accordion.is-open {
  background-color: #ddd;
}

.accordion-content {
  background-color: white;
  border-left: 1px solid whitesmoke;
  border-right: 1px solid whitesmoke;
  padding: 0 20px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-in-out;
}

  </style>
  <script>
    //pseudocode
/*
  1.Grab the accordion buttons from the DOM
  2. go through each accordion button one by one
  3. Use the classlist dom method in combination with the toggle method provided by the DOM to add or remove the "is-open" class. At this point, the accordion button should be able to switch back and forth between its font awesome icons but there is no content inside of it. This is because of the overflow:hidden and the max-height of zero; it is hiding our content. So now we must use javascript to change these values with DOM CSS
  4. get the div that has the content of the accordion button you are currently looking at; we do this using the .nextElementSibling method which allows us to look at the html element that is directly next to the current html element we are looking at. Since we are currently looking at a button (accordion button), the next element after that is the div with the class accordion-content. This is exactly what we want because it allows us to work with the div that has the content that we want to display. Also please note that we could have got to this div in another way but this is the "shortest path" to our answer.
  
  5. set the max-height based on whether the current value of the max-height css property. If the max-height is currently 0 (if the page has just been visited for the first time) or null (if it has been toggled once already) which means that it is closed, you will give it an actual value so the content will be shown; if not then that means the max-height currently has a value and you can set it back to null to close it.
  6. If the accordion is closed we set the max-height of the currently hidden text inside the accordion from 0 to the scroll height of the content inside the accordion. The scroll height refers to the height of an html element in pixels. For this specific example, we are talking about the height of the div with the class accordion-content with all of its nested ptags
*/

const accordionBtns = document.querySelectorAll(".accordion");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("is-open");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});

  </script>
