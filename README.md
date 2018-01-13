# fuck-cors.com
A web proxy specifically designed for simple cross-origin AJAX requests.

http://www.fuck-cors.com/main.html

Example:
```
$.ajax({
  url: "http://fuck-cors.com/?url=http://ip.jsontest.com/",
  dataType: "text",
  success: function (data) {
    console.log(data)
  },
  error: function (xhr, ajaxOptions, thrownError) {
    console.log(xhr.status + thrownError);
  }
});
```
