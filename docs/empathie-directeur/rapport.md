---
layout: default
---

{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.empathy == "empathie-directeur" %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}