from django.urls import reverse

from rest_framework.test import APITestCase, APIRequestFactory
from flight.views import FlightView

class FlightTestCase(APITestCase):
    
    def setUp(self):
        self.factory = APIRequestFactory()

    def test_flight_lis_as_non_auth_user(self):
        request = self.factory.get('/flight/flights')  # reverse('flights-list')
        print(reverse("flights-list"))
        response = FlightView.as_view({'get':'list'})(request)
        print(response)
        self.assertEquals(response.status_code, 200)