import { onMounted, ref } from 'vue';

export const useRandomQuote = () => {
    const loading = ref(false);
    const quote = ref<{
        quote: string | null;
        author: string | null;
    }>({
        quote: null,
        author: null,
    });
    async function fetchQuote() {
        try {
            const response = await fetch('https://dummyjson.com/quotes/random');
            if (response.ok) {
                const data = await response.json();
                quote.value.quote = data.quote || null;
                quote.value.author = data.author || null;
            }
        } catch (error) {}
    }
    onMounted(async () => {
        await fetchQuote();
    });
    return {quote}
};
