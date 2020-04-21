package main

import (
	"encoding/json"
	"fmt"
	"io/ioutil"
	"log"
	"os"

	"github.com/gocolly/colly"
)

func main() {
	c := colly.NewCollector()
	items := []map[string]interface{}{}

	c.OnHTML("div.product-item", func(e *colly.HTMLElement) {
		link := e.ChildAttr("a", "href")
		name := e.ChildAttr("a", "title")
		image := e.ChildAttr("img", "src")
		price := e.ChildText(".price-regular")

		fmt.Println("----------------------------")
		fmt.Printf("- name: %s\n", name)
		fmt.Printf("- link: %s\n", link)
		fmt.Printf("- image: %s\n", image)
		fmt.Printf("- price: %s\n", price)

		items = append(items, map[string]interface{}{
			"name":  name,
			"link":  link,
			"image": image,
			"price": price,
		})
	})

	c.OnError(func(r *colly.Response, err error) {
		fmt.Println("Request URL:", r.Request.URL, "failed with response:", r, "\nError:", err)
	})

	c.Visit("https://tiki.vn/day-sac-day-cap/c1823?_lc=Vk4wMzQwMjcwMDk%3D&src=c.1823.hamburger_menu_fly_out_banner")
	exportToJson(items, "static/day-sac-cap-sac.json")
}

func exportToJson(data []map[string]interface{}, out string) {
	jsonString, err := json.Marshal(data)
	check(err)
	ioutil.WriteFile(out, jsonString, os.ModePerm)
}
func check(err error) {
	if err != nil {
		log.Fatalln(err)
	}
}
