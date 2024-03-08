---
layout: default
---

{% assign pages = site.pages | sort: "order" %}
{% for page in pages %}
 {% if page.empathie == "Empathie de responsable de formation" %}
    {{- page.content | markdownify -}}
  {% endif %}
{% endfor %}