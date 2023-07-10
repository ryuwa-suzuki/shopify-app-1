async function submit() {
  const fetchOptions = {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      product_id: 1,
      review: {
        name: ''
      },
    }),
  };

  return fetch("/apps/sample/api/reviews/create", fetchOptions);
}
