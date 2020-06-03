# Export HTML5 Web Page to PDF.
Convert HTML5 web page to a PDF File Using jsPDF JavaScript library

## Introduction
Generating PDF file format in client-side JavaScript is now trivial with a great library we have probably heard of.

The library allows you to select the DOM (Document Object Model) elements that you wish to publish as PDF content.

<img src="data/SinglePage_form.gif" width="800">

## Problem Statement

Working with generic HTML/CSS content to PDF has been an open question without a definitive answer for quite a long time. We have struggled with a variety of approaches and, in general, all of them have drawbacks.

Popular questions you will see on the web are shown below:

<ul>
    <li>Is it possible to save an HTML page as a PDF using JavaScript or jQuery?</li>
    <li>How to export HTML pages as a PDF using pure JavaScript.</li>
    <li>How to create multiple pages.</li>
    <li>Generate PDF from HTML in div using JavaScript.</li>
    <li>Multiple pages with HTML to PDF converters.</li>
</ul>

The questions go on and on.

## The Goal of this Tutorial

I will walk you through getting started and integrating jsPDF into your browser-based JavaScript web application.

<ul>
At the end of this lesson, you will be able to do the following:
    <li>Use the fromHtml API End Point to get our HTML content container wrapper.</li>
    <li>Create a PDF with multiple pages.</li>
    <li>Create a function to convert images to base64 image Uniform Resource Locator (URL) and use in our header.</li>
    <li>Add header and footer text (like page count) to every single generated jsPDF page.</li>
</ul>