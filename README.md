# Docker Web Application

Welcome to our web application project! This README provides information about the project, its setup, and contribution guidelines.

## Installation and Setup

To run the web application locally, you'll need to follow these steps:

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/isaack-njama/docker-web-app.git
   ```

2. **Navigate to the Project Directory:**

   ```bash
   cd docker-web-app
   ```

## Docker Setup

Before running the application using Docker, you need to install Docker on your machine. Follow the instructions below based on your operating system:

### Installing Docker

#### For Linux Users

Follow the official Docker documentation to install Docker Engine on [Ubuntu](https://docs.docker.com/engine/install/ubuntu/) or [other Linux distributions](https://docs.docker.com/engine/install/).

#### For macOS Users

1. Install Docker Desktop for macOS by following the instructions provided [here](https://docs.docker.com/desktop/install/mac-install/).

#### For Windows Users

1. Install Docker Desktop for Windows by following the instructions provided [here](https://docs.docker.com/desktop/install/windows-install/).

### Running the Application with Docker

Once Docker is installed on your machine, follow these steps to run the application using Docker:

1. **Build the Docker Image:**

   ```bash
   docker build -t <image_name> .
   ```

2. **Run the Docker Container:**

   ```bash
   docker run -p 3000:3000 <image_name>
   ```

   The application will be accessible at `http://localhost:3000`.

## Note

We're in the process of containerizing the application. Once the containerization is completed, you'll be able to run the application directly without building the Docker image manually.

Thank you for your patience and understanding! 🙏

## Contribution Guidelines

Feel free to check out the [Contribution Guide](./CONTRIBUTING.md) to get your hands dirty!

## License

This project is licensed under the [MIT License](./LICENSE). You are free to use, modify, and distribute the code as per the terms of the license.

## Support

If you encounter any issues or have questions, feel free to open an issue in the GitHub repository.

Happy hacking! 🚀
