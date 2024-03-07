import { defineStore } from 'pinia'
import axios from 'axios'

const { VITE_API_KEY, VITE_USERNAME } = import.meta.env

const headers = {
  'content-type': 'application/json',
  'apikey': VITE_API_KEY,
  'username': VITE_USERNAME
}

export const useSearchStore = defineStore('search', {
  state() {
    return {
      searchText: '',
      searchTags: [],
      category: '',
      brands: [],
      price: '',
      results: [
        {
        title: '',
        description: '',
        price: '',
        tags: []
        }
      ],
      categoryInteract: false,
      brandInteract: '',
      priceInteract: '',
      productInfo: {
        title: '',
        description: '',
        price: '',
        tags: []
      }
    }
  },
  actions: {
    async searchProducts(payload) {
      if(payload) {
        this.searchText = payload  // 검색어가 날라옴
      } else {
        this.searchText = ''
      }
      const res = await axios({
        url: 'https://asia-northeast3-heropy-api.cloudfunctions.net/api/products/search',
        method: 'POST',
        headers,
        data: {
          searchText: this.searchText,
          searchTags: this.searchTags
        }
      })
      this.results = res.data

      if(this.price.includes('10만원 이하')) {
        const result = await this.results.filter( item => {
          return item.price < 100000
        })
        this.results = result
      }
      else if(this.price.includes('10만원 - 30만원 이하')) {
        const result = this.results.filter( item => {
          return 100000 < item.price && item.price <= 300000
        })
        this.results = result
      }
      else if(this.price.includes('30만원 - 50만원 이하')) {
        const result = this.results.filter( item => {
          return 300000 < item.price && item.price < 500000
        })
        this.results = result
      }
      else if(this.price.includes('50만원 이상')) {
        const result = this.results.filter( item => {
          return 500000 < item.price
        })
        this.results = result
      }
      return res.data // 필터 브랜드 리스트 뽑기 위함, 필터 브랜드 컴포넌트에서 생성시 함수실행이 됨(검색 첫화면 전체 제품이 출력됨)
    },
    async searchDetail(id) {
      const res = await axios({
        url: `https://asia-northeast3-heropy-api.cloudfunctions.net/api/products/${id}`,
        method: 'GET',
        headers
      })
      this.productInfo = res.data
    },
    async product_payment(payload) {
      const accessToken = window.localStorage.getItem('token')
      const { productId, accountId } = payload
      await axios({
        url: 'https://asia-northeast3-heropy-api.cloudfunctions.net/api/products/buy',
        method: 'POST',
        headers: { ...headers, Authorization: `Bearer ${accessToken}`},
        data: {
          productId,
          accountId
        }
      })
    }
  }
})
