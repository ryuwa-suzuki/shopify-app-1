import { useAuthenticatedFetch } from './useAuthenticatedFetch'

/**
 * A hook for fetching a CSRF token from the server.
 *
 * The CSRF token MUST be included in every POST, PUT, PATCH, or DELETE
 * request sent to the server as a property called "_token" in the JSON body
 * or by header as X-CSRF-TOKEN.
 *
 * @returns {Function}
 */
export const useCsrf = () => {
  const fetch = useAuthenticatedFetch()

  return async () => {
    const response = await fetch('/api/csrf-token')
    const { csrf_token } = await response.json()

    return csrf_token
  }
}
