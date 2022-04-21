<template>
  <section class="section-container">
    <v-row class="signin">
      <v-col cols="8" class="left">
        <h1>Welcome to my site</h1>
      </v-col>
      <v-col cols="4" class="right">
        <h2>LOGIN</h2>
        <validation-observer ref="observer">
          <v-form @submit.prevent="submit">
            <validation-provider v-slot="{ errors }" name="Name" rules="required|email">
              <v-text-field
                v-model="email"
                :error-messages="errors"
                label="Email"
                required
                outlined
                dark
                filled
                dense
              ></v-text-field>
            </validation-provider>
            <validation-provider v-slot="{ errors }" name="email" rules="required">
              <v-text-field
                v-model="password"
                :error-messages="errors"
                label="Password"
                :append-icon="showPass ? 'mdi-eye' : 'mdi-eye-off'"
                @click:append="showPass = !showPass"
                required
                outlined
                dense
                dark
                filled
                :type="showPass ? 'text' : 'password'"
              ></v-text-field>
            </validation-provider>
            <div class="text-center">
              <v-btn class="signin-btn" type="submit" rounded color="white" dark>
                Sign In
              </v-btn>
            </div>
          </v-form>
        </validation-observer>
      </v-col>
    </v-row>
  </section>
</template>
