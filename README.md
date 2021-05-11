# PHP Gera SVG
É um Script PHP que utiliza a sintaxe `$_GET` para gerar a imagem SVG dentro de uma tag `<img />`. Ela aplica a cor informado no `fill:#{cor}` do arquivo SVG.
Muito útil para utilizar o mesmo svg dentro de uma `<img />` com cores diferentes, e sem precisar adicionar CSS para cores.

Ela não tem nenhuma dependência, e é bem simples na aplicação. Feita para reutilizar a mesma imagem, porém com cores diferentes, e utilizando a tag `<img />`.

Sintaxe: 

``` HTML 
<img src="path/to/geraSvg.php?image=../path/to/svg/image/image.svg&collor_key=994455" />
```

Aí, no arquivo SVG, deve ter: 
```HTML 
<path style="fill:#{collor_key}" > 
  ...
</path>
```

Super simples e fácil de usar.
