# PHP Render SVG
Simple PHP script that uses the `$_GET` syntax to render a SVG image inside a `<img />` tag. It applies the given collor on the `fill:#{cor}` inside the SVG file.
Very useful for reusing the same SVG image with a different color without need to use CSS codes to change the colors.

The script doesn't have any dependency and it is really simple on usage. 

For example: 

``` HTML 
<img src="path/to/render_svg.php?image=../path/to/svg/image/image.svg&collor_key=994455" />
```

On the SVG file, there must have:
```HTML 
<path style="fill:#{collor_key}" > 
  ...
</path>
```

Simple and easy to use.

Enjoy!
