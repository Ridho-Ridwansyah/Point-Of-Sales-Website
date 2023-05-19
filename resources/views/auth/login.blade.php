<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <title>Document</title>
        </head>
            <body>

                          <form class="border rounded-lg shadow-lg bg-gray-50 my-10 mx-64 pt-10 pb-20" action="{{ route('login.post') }}" method="POST">
                              <p class="text-7xl text-center font-bold mb-5">Toko Invetaris RPL</p>
                              <hr class="mx-10">
                            @csrf
                              <div class="flex flex-col items-center justify-center px-6 py-8 lg:py-0">
                                  <div class="flex items-center justify-center p-5 font-medium">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>                                          
                                    </div>
                                    <div>
                                        <p class="text-3xl font-sans">Login</p>
                                    </div>
                                    
                                  </div>
                                  <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                                      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                                              <div>
                                                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                                  <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Username" required="">
                                                  @if ($errors->has('name'))
                                                  <span class="text-red-500">{{ $errors->first('name') }}</span>
                                                  @endif
                                              </div>
                                              <div>
                                                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                                  <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                                                  @if ($errors->has('password'))
                                                  <span class="text-red-500">{{ $errors->first('password') }}</span>
                                                  @endif
                                              </div>
                                              <div >
                                                  <input type="submit" value="Login" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"/>
                                              </div>
                                              
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </form>
                    </body>
            </html>