---
layout: default
---

{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.empathie == "Empathie de chef de formation" %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}